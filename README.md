# tidal-sec-secret-core

`tidal-sec-secret-core` keeps a focused PHP implementation around security tooling. The project goal is to implement a PHP security tooling project for secret constraint solving, using bounded scenario files and conflict explanations.

## Purpose

I want this repository to be useful as a quick reading exercise: fixtures first, implementation second, verifier last.

## Tidal Sec Secret Core Review Notes

For a quick review, compare `policy width` with `claim drift` before reading the middle cases.

## What Is Covered

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/tidal-sec-secret-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `claim drift`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Implementation Notes

The implementation keeps the scoring rule plain: reward signal and confidence, preserve slack, penalize drag, then classify the result into a review lane.

The added PHP path is deliberately direct, with fixtures doing most of the explaining.

## Command

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Audit Path

The same command runs the local verification path. The highest-scoring domain case is `recovery` at 201, which lands in `ship`. The most cautious case is `stress` at 135, which lands in `watch`.

## Limits

The repository is intentionally scoped to local checks. I would expand it by adding adversarial fixtures before adding features.
